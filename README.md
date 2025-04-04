# lara-uuid

## Installation

You can install this package via composer:

```bash
composer require lopatin96/lara-uuid
```

### Migration
```php
$table->uuid();
```

### Trait
Add **HasUuid** trait to your models

```php

use Lopatin96\LaraUuid\Traits\HasUuid;

class User extends Authenticatable
{
    use HasUuid, …
```