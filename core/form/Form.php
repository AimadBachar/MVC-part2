<?php 

namespace App\core\form;


use App\Core\Model;

/**
 * Class Field
 * to create a form field
 * @package App\core\form
 */
class Form 
{   
    /**
     * function to create a form first tag dynamically
     * @param string $action
     * @param string $method
     * @return Form 
     */
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    /**
     * function to create close form tag
     * @return string
     */
    public static function end()
    {
        echo '</form>';
    }	

    /**
     * function to create a form field dynamically
     * @param Model $model
     * @param string $attribute
     * @return Form 
     */
    public function field(Model $model, $attribute) 
    {
        return new Field($model, $attribute);
    }
}