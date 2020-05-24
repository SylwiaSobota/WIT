<?php

namespace Application\Model;

class Miesiace
{
    
    public function pobierzWszystkie()
    {
        return [ 'blue' => 'Styczeñ',
            'yellow' => 'Luty',
            'red' => 'Marzec',
            'orange' => 'Kwiecieñ',
            'purple' => 'Maj',
            'magenta' => 'Czerwiec',
            'green' => 'Lipiec',
            'brown' => 'Sierpieñ',
            'pink' => 'Wrzesieñ',
            'gold' => 'PaŸdziernik',
            'cyan' => 'Listopad',
            'violet' => 'Grudzieñ'
        ];
    }
}