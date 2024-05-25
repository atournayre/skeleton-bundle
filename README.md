<!-- installation -->
# Installation
1. Edit the `configure` file to match your needs
2. Run `chmod u+x configure` to make the file executable
3. Run `php configure`
<!-- installation:end -->


# The __BUNDLE_NAME_USER_FRIENDLY__

A Symfony Bundle to __BUNDLE_DESCRIPTION__.

## Getting started
### Installation
You can easily install __BUNDLE_NAME_USER_FRIENDLY__ by composer
```
$ composer require __PACKAGE_NAME__
```
Then, bundle should be registered. Just verify that `config\bundles.php` is containing :
```php
__NAMESPACE__::class => ['all' => true],
```

### Configuration
Then, you should register it in the configuration (`config/packages/__PACKAGE_NAME_UNDERSCORE__.yaml`) :
```yaml
# config/packages/__PACKAGE_NAME_UNDERSCORE__.yaml
    __PACKAGE_NAME_UNDERSCORE__:
```

### Usage

Add a description of how to use the bundle here.


## Contributing
Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

After writing your fix/feature, you can run following commands to make sure that everything is still ok.

```bash
# Install dev dependencies
$ composer install

# Running tests and quality tools locally
$ make all
```

## Authors
- [__AUTHOR_FULLNAME__](https://github.com/__AUTHOR_GITHUB_USERNAME__) - <__AUTHOR_EMAIL_ADDRESS__>

-----------------

## Publishing the bundle to be used by other developers through composer

1- Create the release on the repository
- Go to https://github.com/__AUTHOR_GITHUB_USERNAME__/__PACKAGE_NAME__/releases/new
- "Choose a tag" read carefully the Tagging suggestions.

2- Create the package on packagist
- Go to https://packagist.org/packages/submit
- Enter the github repository url
- Click on "Check"
- Click on "Submit"
- Make the package auto-updatable by clicking on "Enable auto-updates" so you don't have to do it manually each time you create a new release.

3- Create the Symfony Recipe to be able to use the bundle with Symfony Flex and configure the bundle directly with composer
- Go to https://github.com/symfony/recipes-contrib/
- Fork the repository
- Clone the repository and create a pull request with the recipe [like this](https://github.com/symfony/recipes-contrib/pull/1102/files) for your bundle.
