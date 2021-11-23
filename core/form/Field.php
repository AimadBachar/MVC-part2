<?php

namespace App\Core\form;

use App\Core\Model;

class Field
{   
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUM = 'num';
    public const TYPE_EMAIL = 'email';
    public const TYPE_FILE = 'file';
    public const TYPE_HIDDEN = 'hidden';
    public const TYPE_SUBMIT = 'submit';
    public const TYPE_RADIO = 'radio';
    public const TYPE_CHECKBOX = 'checkbox';
    public const TYPE_SELECT = 'select';
    public const TYPE_TEXTAREA = 'textarea';


    public string $type;
    public Model $model;
    public string $attribute;
    
    /**
     * @param Model $model
     * @param string $attribute
     * @return void
     */
    public function __construct(Model $model, $attribute)
    {   
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label for="%s">%s</label>
                <input type="%s" class="form-control%s" id="%s" name="%s" value="%s">
                <div class="invalid-feedback">%s</div>
            </div>
        ', $this->attribute,
        ucfirst($this->attribute), 
        $this->type,
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->attribute,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->getFirstError($this->attribute)
    );

    }

    /**
     * @param string $type
     * @return Object Field
     */
    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    /**
     * @param string $type
     * @return Object Field
     */
    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }

}