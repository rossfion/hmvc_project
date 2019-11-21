# hmvc_project
A repository for a CodeIgniter HMVC project

This is a demo project that was completed with Frank John, Udemy tutor, for his "Learn CodeIgniter: Step by Step" course. It uses the Hierarchical Model-View-Controller (HMVC) design paradigm.

I have made some changes to it, based on similar projects that I have undertaken, as follows:

- added a MY_Controller to the core folder
- changed the Blog controller to posts as this reflects the named folder (posts) and the corresponding database table
- removed one field from the database and code
- fixed the link to the add-post in the navigation
- fixed the link to the latest-posts in the navigation
- modified the profile link for the logged-in user in the navigation
- modified the my posts link in the settings dropdown list
- moved the add post function so it is visible only to logged in users.

An immediate issue that has arisen is the impact these changes have had on routing. 

I would also split the users folder and separate out the different controllers. I may come back to this at some point in the not-too-distant future.

