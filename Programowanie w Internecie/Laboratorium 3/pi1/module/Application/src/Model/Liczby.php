<?php
namespace Application\Model;

class Liczby 
{
    public function generuj()
    {
        for ($i = 0; $i<100; $i++)
        {
            $tablica[$i]= rand(0,1000);
            if ($tablica[$i]%2==0)
            {
               $tablicaParzyste[] = $tablica[$i];
            }
            else 
            {
                $tablicaNieparzyste[] = $tablica[$i];
            }
            sort($tablicaParzyste);
            sort($tablicaNieparzyste);
        }
    }
    
}