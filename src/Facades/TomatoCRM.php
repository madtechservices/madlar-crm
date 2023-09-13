<?php

namespace TomatoPHP\TomatoCrm\Facades;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use TomatoPHP\TomatoCrm\Models\Account;

/**
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM create(?string $form = null)
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM edit(?string $form = null)
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM show(array $show = [])
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM table(array $cols = [],?string $view = null)
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM validation(array $create = [],array $edit = [])
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM filters(array $filters = [])
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM media(array $media = [])
 * @method static \TomatoPHP\TomatoCrm\Services\TomatoCRM attach(string $key,string $label,string $type='text',?string $create_valdation=null,?string $update_valdation=null,bool $show_on_view = true,bool $show_on_create = true,bool $show_on_edit = true,bool $show_on_table = false,bool $allow_filter = false,)
 * @const string LOGIN_BY_EMAIL
 * @const string LOGIN_BY_PHONE
 */
class TomatoCrm extends Facade
{
    CONST LOGIN_BY_EMAIL = 'email';
    CONST LOGIN_BY_PHONE = 'phone';

    public static function getFacadeAccessor(): string
    {
        return 'tomato-crm';
    }
}