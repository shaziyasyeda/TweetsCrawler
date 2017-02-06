# trcxnAssignment

Pre-requisites - XAMPP/LAMPP stack

# STEP 1 - Clone repo
Clone the repository in a directory (say 'trxn') in your server folder.

#STEP 2 - Import Database
Create a database named 'trx_tweets'.
And a db user 'trax' with password 'test123'

Or if you already have database or user change the details in /core/DBConnection.php file.

Import the 'trx_tweets.sql' which is present inside directory 'resources'. This should import 4 empty tables in your db.
Table names are - tweets, hashtags, twt_users, ht_twt_mapping

#STEP 3 - Run
Open 'http://localhost/trxn'.
Enter the hashtag without # in input field.
Click on 'Get Tweets' button.

#STEP 4 - Verify
- Tweets are displayed in UI.
- You should see all tweets stored 'tweets' table.
- All user details stored in 'twt_users' table.
- Hashtag stored in 'hashtags' table.
- Tweets and Hashtags are mapped in 'ht_twt_mapping' table.
- Tweets are being refreshed after every 10 seconds.
