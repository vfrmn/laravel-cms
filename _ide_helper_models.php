<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Book
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $desc
 * @property int $publisher_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Genre[] $genres
 * @property-read int|null $genres_count
 * @property-read \App\Publisher $publisher
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereUpdatedAt($value)
 */
	class Book extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Publisher
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @property-read int|null $books_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publisher whereUpdatedAt($value)
 */
	class Publisher extends \Eloquent {}
}

namespace App{
/**
 * App\Genre
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @property-read int|null $books_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Genre whereUpdatedAt($value)
 */
	class Genre extends \Eloquent {}
}

namespace App{
/**
 * App\Page
 *
 * @property int $id
 * @property string $caption
 * @property string $title_ua
 * @property string $title_en
 * @property string $intro_ua
 * @property string $intro_en
 * @property string $content_ua
 * @property string $content_en
 * @property int $parent_id
 * @property int $order_num
 * @property int $order_type
 * @property string|null $cotainer_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\OrderType $orderType
 * @property-read \App\Page $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereContentEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereContentUa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCotainerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIntroEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIntroUa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereOrderNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereTitleUa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App{
/**
 * App\OrderType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OrderType whereUpdatedAt($value)
 */
	class OrderType extends \Eloquent {}
}

