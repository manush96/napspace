$(document).ready(function()
{	
	$(function()
	{
		$("#type_anim_1").typed
		({
			strings: ["Right"],
			typeSpeed: 100,
			callback: function()
			{
				$("#type_anim_1").next().remove();
				$("#type_anim_2").typed
				({
					strings: ["Accommodation.","Place.","Time.","Price."],
					typeSpeed: 100,
					backDelay: 800,
					backSpeed: 50,
					callback: function()
					{
						setTimeout(function()
						{
							$("#type_anim_2").next().remove();
						},1000);
					},
				});
			},
		});
	});
});