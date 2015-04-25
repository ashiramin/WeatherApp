# WeatherApp
I created this weather application as part of FIO project that was assigned to me.

I'd like to start by adding the website is made using PHP and MySQL as backend with HTML5 CSS3 used in frontend. I used a popular frontend mobile first framework called Bootstrap that provides alot of code to get your project up and running with minimum fuss. I didn't make much design changes to the template due to time constraints and size of the project. I also do believe that at times there is no need to reinvent the wheel you can use a reliable existing work and customize it to your liking.

The database has two tables user and cities which are linked using userid from the users table. I haven't implemented foriegn key on the cities table. PHP queuries the database using PDO library which prevents SQL Injections by making prepared statements. I have also added the database as in SQL format

Unfortunately I couldn't get to add the feature where it prompts the users location and diplays its weather. Although I had everything figured out for it like using HTML5 geolocation to get the coordinates and do reverse lookup using google maps api but I ran into problem of getting a function API key. I was constantly getting the error that my api key wasn't registered when I made the api call.

I chose wunderground api to get weather data for different locations. The api is used by weather channel. Whenever I look for a 3rd pary tool or an API to work with. I consider three things, its developer communtiy and forums, documentation and the frequency with which updates to comply with the latest standards and I applied that here. <br/><br/> 
The reason I chose this API was mostly beacause of its documentation.The documentation for this particular API was pretty extensive with sample codes in a variety of languages. Everything was very detailed and thoroughly explained. And also since the API is used by a lot of developers it would most certainly have a thriving discussion forum when developer run into problems using the API.

I also used Google maps autocomplete API to get locations for different cities.


The website itself as whole could have been designed a lot better than it is now. But I was really busy this past week with 20 hours of work few exams and a lot of homework and to top it all of I had a physics lab report due this week. And if any of you have studied at UK you'd probably be aware of the fact how much work you have to put in for Physics lab. 
The website as a whole could use a bit more testing. The locations are limited to only US states because I didn't have enough time to figure out how I could I format the query for the API for overseas locations.

There is one bug that I had it it figured out but wasn't able to fix it. Please don't jus tyour keyboard when adding a city in to the website.

<ul>
A few things that would've been added/changed if I had more time.
<li>Currently the website allows duplicate entries of the same city. </li>
<li>Users can create multiple acounts based on single email address.</li>
<li>The passwords are not encrpyted.</li>
<li>I believe based on the current design it would be kind of difficult to maintain the code if we scale it into a larger application.</li>
</ul>

If time constrained wasn't an issue and since the project was reallyinteresting I would have added the functionality of 10 day forecast,the data would have pulled from wunderground and using a HTML5 canvas element I would have made a graph of the weather forcast. I would have also added recaptcha V2 made by Google which prevent bots from creating spam accounts.


When evaluating my performance on this project please take into consideration my busy schedule and the fact we are a week away from the end of the semester.

Overall I had a great experience making this website. First time I ever used a weather API, the bootstrap template and Github. Regardless of whether I get the position(I really hope I do) thank you so much for giving the oppertunity to make something useful I learnt alot and it was probably I did thia whole week.

