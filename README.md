# Lean Library Backend Interview stage 
Hello! Welcome to the Lean Library Backend Interview Technical stage.

There are two parts to this stage. 

- Part 1 - Write some code to demonstrate your coding skills. 
- Part 2 - Examine and comment on some code that could do with some care and modernising.

Any issues or questions, please feel free to reach out to <andy@leanlibrary.com> 


## Part 1: Write some code
### Deliverables: 
- Accessible Git repo (Github/GitLab/Bitbucket) with your solution. 
- Write laravel/php code in [part1/src/GradeSchool.php](part1/src/GradeSchool.php) to pass the tests. 

The easiest thing to do would be to clone this repo and add your code to the `part1/src/GradeSchool.php` file.


### Set up and running tests
Prerequsites:
- PHP 8.1 installed
- Composer installed

All the files for this section can be found under the [part1](part1) directory.

The aim of this exercise is to get the [pre-written tests](part1/testts/GradeSchoolTest.php) to run using the following commands:
From the `part1` directory, run the following commands:

```shell
> composer install # Run once for deps etc..
> vendor/bin/phpunit # Run tests to see if your code has passed.
```

### Overview


---


Given students' names along with the grade that they are in, create a roster for a school.

In the end, you should be able to:

1. Add a student's name to the roster for a grade e.g.


    "Add Jim to grade 2."


2. Get a list of all students enrolled in a grade e.g.


    "Which students are in grade 2?"
    "We've only got Jim just now."


3. Get a sorted list of all students in all grades. Grades should sort as 1, 2, 3, etc., 
   and students within a grade should be sorted alphabetically by name e.g.
   

    "Who all is enrolled in school right now?"
    "We have Anna, Barb, and Charlie in grade 1, Alex, Peter, and Zoe in grade 2 and Jim in grade 5. So the answer is: Anna, Barb, Charlie, Alex, Peter, Zoe and Jim"

Note that all the students only have one name. (It's a small town!)



## Part 2: Reviewing Code

### Deliverables

No coding required here! We'll ask you to spend 5-10 minutes (maximum) explaining your findings and what you would change.
There is no need to make a presentation or write code but feel free to do so if you think it would help!

There is no "right answer", the key here is to demonstrate how you communicate and approach problems succinctly!

### Overview
All the files for this section can be found under the [part2](part2) directory.

In part 2, we need you to examine and reflect on some code that could do with some care and modernising.
These are only code "snippets" and are not designed to run. The aim of this task _is not_ to complete the code.
We only want you to comment on the architecture, approach and cleanliness of the code and what you would do to change it.

This code is a stripped-down version of our "Branded Download pages" API endpoint.
It is so stripped-down that there are probably several files that are imported which are not present.

An example of an actual institution's branded page can be found at [https://download.leanlibrary.com/download-lean-library-uni-of-make-believe](https://download.leanlibrary.com/download-lean-library-uni-of-make-believe).
This branded page is fed by two API endpoints that provide all the data needed to render a Branded Download page.

#### API Endpoints

`/branded-pages`

This endpoint lists out all the institutions that have branded pages:
For example,

```json
[
  {
    "id": 496,
    "slug": "some-university"
  },
  {
    "id": 497,
    "slug": "download-lean-library-uni-of-make-believe"
  },
  ...
]
```


and

`/branded-pages/{id}`

This endpoint provides the actual data for each institution:
For example,

```json
{
  "institution_id": 497,
  "slug": "download-lean-library-uni-of-make-believe",
  "uni_name": "University of Make Believe",
  "logo_url": "https:\/\/newleanlibrary-production.ams3.cdn.digitaloceanspaces.com\/library\/211\/assets\/N6yYaF0LuA08we95eeVCScHktlrv92jTVRmpUaMo.png",
  "meta_description": "University of Make Believe has partnered with Lean Library so you now have the ability to easily find study materials wherever and whenever you decide to study.",
  "hero_text": "Download Lean Library for University of Make Believe\\'s",
  "browser_title": "Download Lean Library for University of Make Believe - a browser extension to makes it easier for you to find available digital study material\\'s.",
  "body_content": "<p>Thanks to your friendly University of Make Believe\\'s librarian, and their partnership with Lean Library ...",
  "sidebar_tweet": "<p>Thank you to my library for the <a href=\"https:\/\/twitter.com\/leanlibrary\">@leanlibrary<\/a> browser extension!..."
}
```

We'd like you to review these files and comment on how you would make and/or restructure the code to be "cleaner" and "better"
Ultimately, we want the code to be:

- Maintainable (maintainability)
- Easy to read (readability)
- Easy to change (adaptability)


### Files

`routes.php`
Registers URL routes and their associated Controller


`LLBrandedPagesController.php`
This file currently handles the requests that come into the routes and passes them to a service.


`BrandedPageFetchService.php`
This service class decides what needs to be done to load and return the correct data.

`BrandedPageFetchRepository.php`
`LibraryRepository.php`
These two files are concerned with fetching data from the database

`BrandedPage.php`
`Library.php`
These two files represent entities from the data.




### Glossary
| Term             | Definition                                                                             |
|------------------|----------------------------------------------------------------------------------------|
| Branded Page     | A lean library feature that allows institutions to have their customised download page |
| Insitutition     | A university or company                                                                |
