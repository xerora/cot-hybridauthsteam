Allows HybridAuth to automatically set the Steam ID for the Cotonti Steam module.

## Installation

Prerequisites: HybridAuth plugin and Steam module installed.

__Add Steam to HybridAuth ( skip if already added )__

1. Go to `http://hybridauth.sourceforge.net/download.html` and download `Additional providers package`
2. Extract and move the `/hybridauth-additional-providers-1.8/hybridauth-steam/Providers/Steam.php` into `/plugins/hybridauth/lib/Hybrid/Providers/Steam.php`
3. Open `/plugins/hybridauth/conf/hybridauth.config.php` and add Steam into the providers array. Steam does not currently require keys, id, or a secret.
4. Go into `Administration` under the HybridAuth plugin to create the steam fields in the user table
5. Click `Update` under the HybridAuth plugin to add Steam to the hybridauth providers list

__Example of adding Steam to hybridauth.config.php__

```PHP
return array(
	"providers" => array(
		....
		"Steam" => array(
			"enabled" => true
		)
	)
);
```

__Install HybridAuth Steam__

1. Download, extract into the plugins folder and install `hybridauthsteam` through the administration panel

