# Laravel Slack Invite 

[![Latest Stable Version](https://poser.pugx.org/danrovito/laravelslackinvite/v/stable?format=flat)](https://packagist.org/packages/danrovito/laravelslackinvite) [![Total Downloads](https://poser.pugx.org/danrovito/laravelslackinvite/downloads?format=flat)](https://packagist.org/packages/danrovito/laravelslackinvite) [![License](https://poser.pugx.org/danrovito/laravelslackinvite/license?format=flat)](https://packagist.org/packages/danrovito/laravelslackinvite) [![StyleCI](https://styleci.io/repos/67619777/shield?branch=master)](https://styleci.io/repos/67619777) [ ![Codeship Status for Darovi/LaravelSlackInvite](https://codeship.com/projects/9ab07ed0-4dc0-0134-3701-266445f4b7e3/status?branch=master)](https://codeship.com/projects/170616)

## Getting started

To get started you must first install the package from composer.

```
composer require danrovito/laravelslackinvite
```

Add the following to your `.env` file 

```
SLACK_TOKEN=YOUR_SLACK_TOKEN  (this token can be generated here `https://api.slack.com/docs/oauth-test-tokens`)
SLACK_HOSTNAME=YOUR_SLACK_NAME (this is the HOSTNAME.slack.com in your slack url)
```

## Usage

To use Slack invite all you have to do is use the following.  Supply your users email address in the `EMAIL_ADDRESS` space.

```php
\Darovi\LaravelSlackInvite\Slack::invite('EMAIL_ADDRESS');
```

You will receive a json response

```json
{"ok":true}
```

or

```json
{"ok":false,"error":"already_invited"}
```

## License

Laravel Slack Invite is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Bug Reporting and Feature Requests

Please add as many details as possible regarding submission of issues and feature requests

## Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
