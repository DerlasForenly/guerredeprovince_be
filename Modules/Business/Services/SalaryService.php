<?php

namespace Modules\Business\Services;

use Modules\Resource\Models\Resource;

class SalaryService
{
    public function deduct($p_res): bool
    {
        foreach ($this->resources()->get() as &$r) {
            foreach ($p_res as &$pr) {
                if ($r->resource_id == $pr->resource_id) {
                    $r->quantity -= $pr->quantity;
                    $r->save();
                }
            }
        }

        return true;
    }

    public static function deductResources(array $ur, array $pr) {
        if ($pr === [] || $ur === []) {
            return false;
        }

        foreach ($ur as &$r) {
            foreach ($pr as $r2) {
                if ($r['resource_id'] === $r2['resource_id']) {
                    if ($r['quantity'] >= $r2['quantity']) {
                        $r['quantity'] -= $r2['quantity'];
                    } else {
                        return false;
                    }
                }
            }
        }

        return $ur;
    }

    public static function isEnoughResources($ur, $pr) {
        foreach ($ur as &$r) {
            foreach ($pr as &$r2) {
                if ($r->resource_id == $r2->resource_id && $r->quantity < $r2->quantity) {
                    return false;
                }
            }
        }

        return true;
    }

    public function isEnough($p_res): bool
    {
        $u_resources = $this->resources()->get();

        foreach ($u_resources as &$r) {
            foreach ($p_res as &$pr) {
                if ($r->resource_id == $pr->resource_id && $r->quantity < $pr->quantity) {
                    return false;
                }
            }
        }

        return true;
    }

    public function countSalary(int $time)
    {
        if ($this->salary_type === 1) {
            return $time * $this->salary;
        } else if ($this->salary_type === 2) {
            return $time;
        }
    }

    public function accrueSalary(int $time)
    {
        $salary = $this->countSalary($time);
        $resources = $this->resources();

        if ($this->salaty_type === 1) {
            $resource = $resources->where('resource_id', Resource::where('name', 'money')->first()->id)->first();
            $resource->update([
                'quantity' => $resource->quantity + $salary
            ]);
        } else if ($this->salary_type === 2) {
            $resource_id = $this->employee->business->resource_id;
            $resource = $resources->where('resource_id', $resource_id)->first();
            $resource->update([
                'quantity' => $resource->quantity + $salary
            ]);
        }

        return $salary;
    }
}
