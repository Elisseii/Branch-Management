Links structure

/ - Home Page (display all cities).
/moscow - City Page (display all branches of city).
/branches/branchName - Branch Page - (details page of branch).



//////////////////////////// CITIES PAGE /////////////////////////

// Use Builder List to display all cities of company here.
{% component 'builderList' %}

//////////////////////////// CITY PAGE /////////////////////////

// This Builder List display all branches of city page or switch to branch mode.

{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}

	{% if record.branches|length < 2 %}
		
		{% for branch in record.branches %}
			
			<h1>BRANCH: <a href="/branches/{#{{ record.slug }}/#}{{ branch.slug }}">{{ branch.name }}</a></h1>
			
		{% endfor %}
		
	{% else%}
	
		<div>
			<h1>CITY: {{ attribute(record, displayColumn) }}</h1>
			<h3>Branches:</h3>
			<ul>
				{% for branch in record.branches %}
				
				<li><a href="/igroteki/{#{{ record.slug }}/#}{{ branch.slug }}">{{ branch.name }}</a></li>
				
				{% endfor %}
			</ul>
		</div>
		
	{% endif %}

{% else %}
	
{% endif %}

//////////////////////////// BRANCH PAGE /////////////////////////

// Use Builder Details
{% component 'builderDetails' %}



