<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Categoria
 *
 * @property int $id
 * @property string $categoria
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereUpdatedAt($value)
 */
	class Categoria extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Endereco
 *
 * @property int $id
 * @property string $logradouro
 * @property string $numero
 * @property string $cidade
 * @property string $estado
 * @property string $cep
 * @property string $complemento
 * @property int $usuario_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco query()
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereCep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereCidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereComplemento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereLogradouro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Endereco whereUsuarioId($value)
 */
	class Endereco extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Produto
 *
 * @property int $id
 * @property string $nome
 * @property string $valor
 * @property string|null $foto
 * @property string|null $descricao
 * @property int $categoria_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Produto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produto whereValor($value)
 */
	class Produto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|RModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RModel query()
 */
	class RModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Usuario
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $nome
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $email
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario query()
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usuario whereUpdatedAt($value)
 */
	class Usuario extends \Eloquent {}
}

