<?php


namespace App;

use Illuminate\Support\Collection;

class GradeSchool
{
    private array $collector = [];

    public function roster(): Collection
    {
        return collect($this->collector);
    }

    public function add(string $name, int $grade): void
    {
        $collection = $this->roster();
        if($name !== '' && $grade){
            if($collection->has($grade)){
                $this->collector[$grade][] = $name;
                $this->collector[$grade] = $this->grade($grade)->toArray();
            }else{
                $this->collector = $collection->put($grade, [$name])->toArray();
            }
        }
    }

    public function grade(int $grade): Collection
    {
        return collect(
            $this->roster()->pull($grade)
        )->sort()->values();
    }

}