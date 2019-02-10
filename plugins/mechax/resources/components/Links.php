<?php
/**
 * Created by PhpStorm.
 * User: TEC-HOUSE
 * Date: 01/31/2019
 * Time: 05:09 م
 */

namespace Mechax\Resources\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Exception\ApplicationException;

class Links extends ComponentBase
{

    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.

        return [
            'name' => 'Links',
            'description' => 'Displays resource links',
        ];
    }

    public function defineProperties()
    {
        return [
            'link1' => [
                'title' => 'Link 1',
                'description' => 'Link 1 URL',
                'type' => 'string',
            ]
        ,
            'link2' => [
                'title' => 'Link 2',
                'description' => 'Link 2 URL',
                'type' => 'string',
            ]
        ,
            'link3' => [
                'title' => 'Link 3',
                'description' => 'Link 3 URL',
                'type' => 'string',
            ]
        ];
    }

    public function onRun()
    {
     //   parent::onRun(); // TODO: Change the autogenerated stub

        $links = [$this->property('link1'),$this->property('link2'),$this->property('link3')];
        $this->page['links'] = $links;
    }
}
