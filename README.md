## Purpose of the Test

We need to make an API call from the Laravel Framework to BigQuery. The goal is to obtain the next stats:
- Total clicks
- Last month clicks
- Total impressions
- Last month impressions

Now the query is going to be matching the **slug** or the **ListingId**. (I suggest to use ORWHERE and LIKE in the query).

## Tests

There is a Listing Tests that summerize the result of the task. You may need to change some details if necessary.
