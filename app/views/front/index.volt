{% extends './layouts/app.volt' %}

{% block content %}
	{% for video in videos %}
        <div class="card">
			<div class="card-img">
				<a href="{{ video['link'] }}">
					<img src="#" alt="">
				</a>
			</div>
            {{ video['title'] }}
        </div>
	{% endfor %}
{% endblock %}