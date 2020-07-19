# Objects

The following objects/classes are the basis for the mapping structure.

## `EventFeed` and implementations

An `EventFeed` is an abstract class. It represents a feed from Eventim. This can be an API response, a JSON dump etc. 

Note that "feed" represents any type of external data. It could be a Json file, but it is proposed to also support
Restful API requests. 

This class is extended by classes such as `EventFeedJson`, which implement `EventFeedInterface`. This contracts the 
child class to implement the required methods, such as `processFeed` and `fetchFeed`. 

It will contain an array of `EventSerie` objects.

* `EventFeed`
* `EventFeedInterface`
* `EventFeedJson`

Proposed:

* `EventFeedApi`

## `EventFeedJson`

An `EventFeedJson` models the json version of the event feed provided by Eventim. 

## `EventSerie`

An `EventSerie` is a collection of events. This Name provided by Eventim. Note that many JsonApi standards require a 
singular named array describing many items. This can practically seen as "EventSeries".

This object is a wrapper for a collection of `Event` and `Artist` objects and other data that are thematically linked.

## `Artist`

An `Artist` represents an artist.

## `EsCategory`

An `EsCategory` represents the sorting category for an `EventSerie`.

## `Event`

An `Event` represents an event. This is the main object of interest for the proposed plug-ins.

## `PriceCategory`

Each `Event` object may have multiple `PriceCategory` objects. These represent the different pricing tiers of events.