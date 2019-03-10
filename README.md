# 🖇 Linked

Linked List implementation in PHP.

## Installation

```shell
composer require angle/linked
```

## Usage

Creating an empty list and appending items.
```php
$list = new Angle\Linked\Linked;
$list->append('PHP');
$list->append('Ruby');
$list->append('Javascript');

print $list->head->next->next->data; // Javascript
```

Prepend elements to the list:
```php
$list->prepend('Golang');

print $list->head->data; // Golang
```

Print the list:
```php
print $list; // Golang, PHP, Ruby, Javascript
```

## Contributing

Improvements are welcome! Feel free to submit pull requests.

## Licence

MIT

Copyright © 2019 [Angle Software](https://angle.software)
