=== Plugin Name ===
Contributors: briancray
Donate link: http://briancray.com/
Tags: rss, feed, feeds, analytics, atom, automatic, google, integration, plugin, seo, statistics, stats, url
Requires at least: 2.3
Tested up to: 2.8.3
Stable tag: trunk

Track inbound subscriber traffic in Google Analytics. Adds Google Analytics campaign tracking parameters to URLs in your RSS feeds.

== Description ==

THE PROBLEM

I can’t directly attribute traffic to my subscribers because they aren’t segmented in my web analytics.

Why? Subscribers coming from offline applications get categorized under “(direct) ((none))” in <a href="http://www.google.com/analytics/">Google Analytics</a>. I can’t simply attribute “(direct) ((none))” to only subscriber traffic because “(direct) ((none))” could include browser bookmarks, direct URL entry, or other apps (such as Twitter apps).

THE SOLUTION

Automatically tag my RSS permalinks with <a href="http://www.intownwebdesign.com/google-analytics/google-analytics-utm-link-tagging-explained.html">UTM campaign tags</a>. Then my subscriber traffic will automatically be segmented in Google Analytics!

== Installation ==

1. Upload `track_subscriber_traffic.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why should I use this? =

Because you want to track how much traffic is attributed to your feeds and what subscribers do on your site.

= How does it work? =

Splices some Google Analytics campaign tags into your RSS permalinks automatically. Keep reading if that didn't make sense :)

= What is Google Analytics =

A free service from Google that tracks your visitors. See <a href="http://www.google.com/analytics/">Google Analytics page</a> for information and to signup.

= What is Google Campaign Link Tagging? =

Attaching parameters to a URL that tell Google specific information about a visitor. See <a href="http://www.intownwebdesign.com/google-analytics/google-analytics-utm-link-tagging-explained.html">this blog post</a> for a helpful explanation.

= Will this mess up my analytics? =

Not really. Google Analytics keeps campaign tracking under a separate category. Choose "Campaigns" on the left-side navigation inside Google Analytics.

== Screenshots ==

1. This is what it looks like in Google Analytics (a small screenshot taken from a portion of my blog's day :))

== Changelog ==

= 1.0 =
* This blog was published at this version.