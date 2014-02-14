<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eder
 * Date: 11/02/14
 * Time: 08:34 PM
 * To change this template use File | Settings | File Templates.
 *
 *
 * En Laravel los modelos utilizan el Eloquent ORM, que proporciona una manera elegante y fácil de interactuar con la base de datos. Para esto cada tabla en la base datos debe tener su correspondiente modelo.
 */

class Usuario extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'apellido');
}

?>