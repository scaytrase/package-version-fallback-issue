# Package versions issue

## How to reproduce

```bash
composer install --no-scripts
php bin/expose.php
```

## Expected output
Versions should be equal
```
symfony/symfony: v5.0.2@c94e669fb16c280ad7346287d21a36f02481c54f
symfony/process: v5.0.2@c94e669fb16c280ad7346287d21a36f02481c54f
infection/infection: 0.15.0@1d79de53cbc1dfa902e1ea4afba6c3f0214d5224
```

## Actual output
```
symfony/symfony: v5.0.2@c94e669fb16c280ad7346287d21a36f02481c54f
symfony/process: v4.3.2@856d35814cf287480465bb7a6c413bb7f5f5e69c
infection/infection: 0.13.4@f0f8327f5e60d1a7d8ab4ea01074c6250ab96f57
```
