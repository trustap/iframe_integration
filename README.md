README
======

About
-----

This repository is a skeleton project that shows how to integrate Trustap into a
buy-and-sell website.

See the [live demo](https://stagedemo.trustap.com) for a sample application that
uses this integration.

Flow
----

This Trustap integration is based on buy-and-sell listings.

A user can create a new listing on `sell.php`. Clicking "Use Trustap" will
populate the form with a Trustap listing ID that will be generated for the
Trustap user that is currently logged in in the browser. This ID should be
stored in a database with the listing. See the script at the bottom of
`sell.php` for details on how to generate a Trustap listing ID.

The `index.php` page shows all listings that were created. Any listings that
have a Trustap listing ID stored with them say that they have got Trustap
enabled. This allows websites to enable/disable Trustap for particular listings.

The `listing.php` page gives details for a particular listing. Any element can
be used as a "Safe Payment Button" using `setSafePaymentButton` (see example
code in `listing.php`. This will bring up a modal that can create a new Trustap
transaction between a second user and the user that created the initial listing.

Any user can view their Trustap transactions through the iframe defined in
`trustap.php`.

Other Files
-----------

* `init.php` initialises a database connection and global variables. The
  database configuration must be updated before this project can be used
  locally.
* `seed.sql` defines a minimal table schema for storing listings.
