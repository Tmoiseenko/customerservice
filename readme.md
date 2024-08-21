
# CustomerService

This package is designed to create a common user entity, regardless of whether he is authorized 
in the application or not, for the possibility of saving the user's interaction before and after 
authorization. For example, a user logged into the system without authorization and put something 
in the basket or favorites, after authorization all his deferred positions can be synchronized with 
a specific user after authorization.

## Installation

Via Composer

```bash
composer require tmoiseenko/customerservice
```

## Usage

**create** - принимает в качестве аргумента hash для создания записи в таблице Customer.

**getByHash** - принимает в качестве аргумента hash для получения конкретного Customer.

**associateWithUser** - принимает в качестве аргументов hash и идентификатор пользователя для Customer с конкретным пользователем.

**removeByHash** - принимает в качестве аргумента hash для удаления Customer.

**checkIsNotCustomerInDb** - принимает в качестве аргумента hash для проверки существует ли Customer  в базе данных с таким hash.


## Testing

```bash
composer test
```

## Security

If you discover any security related issues, please email angrav6@gmail.com instead of using the issue tracker.

## Credits

- [Timur Moiseenko](https://tmoiseenko.uz)

## License

MIT.
