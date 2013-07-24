# Laratwilio
* simple wrapper for sending sms messages via twilio with Laravel4.
* calls or anything else other than sending sms messages is not currently supported (pull requests welcome)

## Installation
1. add "twilio/laratwilio": "dev-master" to coposer require
2. run `composer update` and `composer install`
3. add Laratwilio to the list of providers. In config/app.php add the following line to the `providers` array:
	`'Twilio\Laratwilio\LaratwilioServiceProvider'`
4. add a Facade for more convenient usage. In config/app.php add the following line to the `aliases` array:
	`'Sms' => 'Twilio\Laratwilio\Facades\Laratwilio'`
5. publish config files so that you can put your Twilio details in the right place. In your terminal:
    `php artisan config:publish twilio/laratwilio`
6. edit the new config file in the `config/packages/twilio/laratwilio` and enter your data

## Usage
Anywhere in your application when you need to send an sms message, just do:
    `Sms::send(array('to'=>'+12345678', 'text'=>'hello world'));

## Disclaimer
This is my first package and I'm very new to all this.
Most likely I'm doing lots of things wrong. Use at your own risk.
If there is a better way of doing anything here - I'm looking forward to your pull requests.
May the force be with you.