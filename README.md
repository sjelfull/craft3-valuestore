# Valuestore plugin for Craft CMS 3.x

Easily store some loose values into files

![Screenshot](resources/img/icon.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require superbig/craft3-valuestore

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Valuestore.

## Using Valuestore

```twig
{% store = craft.valueStore.create('storeName.json') %}

{% do store.put('key', 'value') %}

{# Returns "value" #}
{{ store.get('key') }}

{# Returns true #}
{{ store.has('key') }}

{# Iterate over values #}
{% for key,value in store.all() %}{% endfor %}

{# Increment number - returns 1 #}
{{ store.increment('number') }}
```

See full overview of methods in the [Valuestore readme](https://github.com/spatie/valuestore)

## Credits

[Add calendar icon by Ben Davis](https://thenounproject.com/term/add-calendar/770071)

Brought to you by [Superbig](https://superbig.co)
