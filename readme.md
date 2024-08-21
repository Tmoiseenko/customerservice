
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

**create** - takes a hash as an argument to create a record in the Customer table.

**getByHash** - takes a hash as an argument to get a specific Customer.

**associateWithUser** - takes a hash and a user ID for a Customer with a specific user as arguments.

**removeByHash** - takes a hash as an argument to delete a Customer.

**checkIsNotCustomerInDb** - takes a hash as an argument to check if a Customer with that hash exists in the database.

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
