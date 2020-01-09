<?php

namespace Filipac\Cnp\Yii2;

use Yii;
use yii\validators\Validator;
use Filipac\Cnp\Cnp;

/**
 * CnpValidator validates that the attribute value is a valid romanian CNP.
 *
 * @author Stefan Radu <rdu.stefan94@gmail.com>
 * @author Razvan Grigore <razvan.grigore@vampirebyte.ro>
 */
class CnpValidator extends Validator
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = Yii::t('yii', '{attribute} is invalid.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateAttribute($model, $attribute)
    {
        $value = $model->$attribute;
        if (Cnp::invalid($value)) {
            $this->addError($model, $attribute, $this->message);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function validateValue($value)
    {
        if (Cnp::invalid($value)) {
            return [$this->message, []];
        }
    }
}
