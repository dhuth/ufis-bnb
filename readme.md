# UFIS-BNB Programming Project Instructions #

```Please read all instructions CAREFULLY before starting this project!```

## Overview ##

The objective of this project is to create the beginnings of a basic property rental web application (think [Airbnb](https://www.airbnb.com)). We have provided you with a skeleton Laravel application and some dummy rental property records. Your goal is to complete the tasks from the tasklist below. 

We will use this project as a way to analyze your frontend, backend, and database skills. 

## Tasks ##

* [x] Display all properties from the `Property` table on the homepage as links (this was done for you) 
* [ ] Assign types to the properties  **HINT: Is a new table needed for this?**
     * [ ] Properties with `property_id` 1 and 2 should have type: "House"
     * [ ] Properties with `property_id` 3 and 4 should have type: "Apartment"
     * [ ] Property with `property_id` 5 should have type: "Cabin"
* [ ] Create fake reviews for some (or all) of the properties. Reviews should include a numeric rating from 1-5 (required) as well as a comment (optional).
* [ ] Route each link from the homepage to a separate page containing details for each of the properties. The property pages should include: the title of the property, its type, and its reviews.
* [ ] Allow users to filter all properties on the homepage by type.
* [ ] Allow users to sort all properties on the homepage by average rating.

## Setup ##

#### Docker Setup ####
* It is highly recommended that you use [Docker/Laravel Sail](https://laravel.com/docs/8.x/sail) as your local Laravel development environment (follow this [step-by-step installation tutorial](https://nguyenmichelle.github.io/docker/)). This will ensure that your local environment has the required packages and dependencies.
                                                                                               
   
#### Other Setup ####
* Docker is not necessary to run a local Laravel app, however, if you decide not to use Docker/Sail for your development, be sure to update your DB configurations in the `.env` file.
* After cloning/forking the repo, run `composer install` from the `ufis-bnb` directory as well as `php artisan migrate:fresh --seed`.
* You should now be able to navigate to the homepage of your local site from your browser to see the homepage of the skeleton app we have provided. 


## Guidelines and Notes ##

* Contact [Michelle Nguyen](mailto:michelle.nguyen@utah.edu) if you have any set-up questions or concerns.
* You **will** need to modify existing tables as well as create new tables in order to fulfill the required tasks.
* Commit frequently! We are as interested in your workflow as your result. Make sure to include good commit messages.
* If you have more time and would like to show off, feel free to add more to your implementation (e.g. allowing current users to add reviews to properties, more sorting/filtering capabilities, descriptions/images for the properties, a fancy UI, etc.)
* Feel free to use internet resources to help you implement your solutions, but make sure all code is your own. We want to see how you are able to find and utilize available resources.
* External libraries and packages are allowed. Let us know in your submission email if you used any additional libraries/packages and if there are special instructions to compile and run your code.
* You may spend a **maximum of 8 hours** (not including time spent for setup) on this! If you have not completed the tasks by the end of the 8 hours, submit what you have.


## Submission ##
When you have finished, email us a link to your public repository on GitHub or Bitbucket. Also, in the email, send us a short analysis answering these questions:

* If you had days instead of hours to implement this, how would you improve your solution?
* Do you have any enhancements that you want to suggest, or pre-emptively implement?
 
###### If you haven't set up a public repo, send us a `.zip` of your working copy, complete with the `.git` directory. ######