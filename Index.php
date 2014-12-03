<html>
<head>

	<title>TAKE.com</title>
    <style>
	#container
	{
		height:100%;
		width:100%;
	}
	
	.flower_out
	{
		background-size:contain;
		width:50%;
		height:50%;
		float:left;
		opacity:1;
	}
	
	#take_com
	{
		height:60%;
		width:27%;
		vertical-align:central;
		margin:0 auto;
	}
	
	#start_btn
	{
		opacity:1;
		height:52%;
		width:10%;
		background-size:contain;	
		margin:0 auto;
		vertical-align:middle;
		overflow:hidden;
	}
	
	.btn
	{
		opacity:0;
		height:52%;
		width:10%;
		background-size:contain;	
		float:left;
		margin-left:12%;
		margin-top:5%;
		vertical-align:middle;
	}
	
	#panel
	{
		width:100%;
		height:40%;
		float:left;
	}
	
    </style>
    
</head>

<body>
	<div id="container">
    
     <div id="take_com">
    	<div class="flower_out" style="background-image:url(Res/T-1.jpg)">
        </div>
        <div class="flower_out" style="background-image:url(Res/A-1.jpg)">
        </div>
        </br></br></br></br></br></br></br></br></br></br>
        <div class="flower_out" style="background-image:url(Res/K-1.jpg)">
        </div>
        <div class="flower_out" style="background-image:url(Res/E-1.jpg)">
        </div> 
     </div>
     
     <div id="panel">
        <div id="start_btn" style=" background-image:url(Res/Start-1.jpg)">
        </div>
     </div>
        
    </div>
</body>

<script>
	var t=document.getElementsByClassName("flower_out").item(0);
	var a=document.getElementsByClassName("flower_out").item(1);
	var k=document.getElementsByClassName("flower_out").item(2);
	var e=document.getElementsByClassName("flower_out").item(3);
	var strt_btn=document.getElementById("start_btn");
	var panel=document.getElementById("panel");
	
	var stp,stp2,stp3;
	
	function load_opt()
	{
		var newnode=strt_btn;
		newnode.className="btn";
		newnode.id="btn-1";
		newnode.style.backgroundImage="url(http://localhost/TAKE/Res/BTN-1.jpg)";
		
		// BTN-1
		panel.appendChild(newnode);
				
		var newnode2=newnode.cloneNode(true);
		newnode2.id="btn-2";
		newnode2.style.backgroundImage="url(http://localhost/TAKE/Res/BTN-2.jpg)";
		// BTN-2
		document.getElementById("panel").appendChild(newnode2);
		
		var newnode3=newnode.cloneNode(true);
		newnode3.id="btn-3";
		newnode3.style.backgroundImage="url(http://localhost/TAKE/Res/BTN-3.jpg)";
		// BTN-3
		document.getElementById("panel").appendChild(newnode3);
		
		var newnode4=newnode.cloneNode(true);
		newnode4.id="btn-4";
		newnode4.style.backgroundImage="url(http://localhost/TAKE/Res/BTN-4.jpg)";
		// BTN-4
		document.getElementById("panel").appendChild(newnode4);	
		
		stp3=setInterval(function(){
			if(parseFloat(newnode.style.opacity)+0.02<1)
			newnode.style.opacity=parseFloat(newnode.style.opacity)+0.02;
			else
			{
				clearInterval(stp3);
				stp3=setInterval(function(){
			if(parseFloat(newnode2.style.opacity)+0.02<1)
			newnode2.style.opacity=parseFloat(newnode2.style.opacity)+0.02;
			else
			{
				clearInterval(stp3);
				stp3=setInterval(function(){
			if(parseFloat(newnode3.style.opacity)+0.02<1)
			newnode3.style.opacity=parseFloat(newnode3.style.opacity)+0.02;
			else
			{
				clearInterval(stp3);
				stp3=setInterval(function(){
			if(parseFloat(newnode4.style.opacity)+0.02<1)
			newnode4.style.opacity=parseFloat(newnode4.style.opacity)+0.02;
			else
			{
				clearInterval(stp3);
			}
		},1);
			
			}
		},1);
			}
			
		},1);
			
		}
		},1);			
	}
	
	function start()
	{
		stp3=setInterval(function(){
			if(parseFloat(strt_btn.style.opacity)-0.02>0)
			{
				strt_btn.style.opacity=parseFloat(strt_btn.style.opacity)-0.02;
			}
			else
			{
				if(strt_btn.parentNode==panel)
				panel.removeChild(strt_btn);
				clearInterval(stp3);
				load_opt();
			}
		},1);
		
	};
	
	
	function anim_stage1()
	{
		//window.alert("stage1");
		if(parseFloat(t.style.opacity)<1)
		{
			t.style.opacity=parseFloat(t.style.opacity)-0.02;
			e.style.opacity=parseFloat(e.style.opacity)-0.02;
			if(parseFloat(t.style.opacity)-0.02<0)
			{
				var c_1="url(http://localhost/TAKE/Res/T-2.jpg)";
				var c_2="url(http://localhost/TAKE/Res/A-2.jpg)";
				var c_3="url(http://localhost/TAKE/Res/K-2.jpg)";
				var c_4="url(http://localhost/TAKE/Res/E-2.jpg)";
				
				if(c_1.localeCompare(t.style.backgroundImage)==0)
				{
					t.style.backgroundImage="url(http://localhost/TAKE/Res/T-1.jpg)"
					e.style.backgroundImage="url(http://localhost/TAKE/Res/E-1.jpg)"
				}
				else
				{
					t.style.backgroundImage="url(http://localhost/TAKE/Res/T-2.jpg)"
					e.style.backgroundImage="url(http://localhost/TAKE/Res/E-2.jpg)"
				}
				
				stp2=setInterval(anim_stage2,1);
				clearInterval(stp);
			}
		}
	}
	
	function anim_stage3()
	{
			a.style.opacity=parseFloat(a.style.opacity)-0.02;
			k.style.opacity=parseFloat(k.style.opacity)-0.02;
			
			if(parseFloat(a.style.opacity)-0.02<0)
			{
				var c_1="url(http://localhost/TAKE/Res/T-2.jpg)";
				var c_2="url(http://localhost/TAKE/Res/A-2.jpg)";
				var c_3="url(http://localhost/TAKE/Res/K-2.jpg)";
				var c_4="url(http://localhost/TAKE/Res/E-2.jpg)";
				
				if(c_2.localeCompare(a.style.backgroundImage)==0)
				{
					a.style.backgroundImage="url(http://localhost/TAKE/Res/A-1.jpg)"
					k.style.backgroundImage="url(http://localhost/TAKE/Res/K-1.jpg)"
				}
				else
				{
					a.style.backgroundImage="url(http://localhost/TAKE/Res/A-2.jpg)"
					k.style.backgroundImage="url(http://localhost/TAKE/Res/K-2.jpg)"
				}
				stp2=setInterval(anim_stage4,1);
				clearInterval(stp);
			}
	}
	
	function anim_stage2()
	{	
		if(t.style.opacity<1)
		{
			t.style.opacity=parseFloat(t.style.opacity)+0.02;
			e.style.opacity=parseFloat(e.style.opacity)+0.02;
			
			if(parseFloat(t.style.opacity)==1)
			{
				a.style.opacity=0.98;
			    k.style.opacity=0.98;
				stp=setInterval(anim_stage3,1);
				clearInterval(stp2);
			}
		}
	}
	
	function anim_stage4()
	{		
		if(a.style.opacity<1)
		{
			a.style.opacity=parseFloat(a.style.opacity)+0.02;
			k.style.opacity=parseFloat(k.style.opacity)+0.02;
			
			if(parseFloat(a.style.opacity)==1)
			{
				t.style.opacity=0.98;
				e.style.opacity=0.98;
				stp=setInterval(anim_stage1,1);
				clearInterval(stp2);			
			}
		}
	}
	
	document.body.onload=function()
	{
			t.style.opacity=0.98;
			e.style.opacity=0.98;
			strt_btn.style.opacity=0;
			
			start();
			stp=setInterval(anim_stage1,1);
	}
</script>

</html>