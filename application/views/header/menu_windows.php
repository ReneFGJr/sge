<style>
  
.pagina{
  position: absolute;
  top: 120px;
  height:auto;
  min-width: 800px;
}
  
.linha{
    width:auto;
    padding:5px;
    height:auto;
    display:table;     
}

.tile4x4
    {
    height:220px;  
    width:430px; 
    
    float:left;
    margin:0px 0px;
    padding:0px;  
    
    border: 0px solid #000000;      
    }

.tile2x2
    {
    height:210px;  
    width:217px; 
    
    float:left;
    margin:0px 0px;
    padding:0px;  
    
    border: 0px solid #000000;      
    }
    
.tile{
    height:200px;  
    width:200px; 
    
    float:left;
    margin:5px 5px;
    padding:2px;

    border-width: 1px; 
    border-style: solid; 
    border-color: #DDDDDD; 
    border-radius: 0px; 
    box-shadow: 0px 10px 6px -6px #777777
}
.tile:hover
    {
        background-color: #8080FF;
        color: #000000;
        opacity: 1;
        animation-duration: 4s;
    } 
.tileLargo{
    width:420px;
    float:left;
}

.tileMini{
    width:92px;
    height:93px;
    float:left;
    margin:4px 4px;    
}
.fcor00{
    color: #000000;
}
.cor01{
    background-color:#DAA520;
}
  
.cor02{
    background-color:#DAA520; 
}
  
.cor03{
    background-color:#DAA520;
}
  
.cor04{
    background-color: #DAA520;
}

.selecionado{
    background-color: #483D8B;
}	
</style>

<h1 class="fcor00">Grupos</h1>

<div class="pagina">
	<div class="linha">
		<div class="tile cor01">
			<span class="titulo">Tile 1</span>
			<br/>
		</div>
		<div class="tile cor01">
			1
		</div>
		<div class="tile tileLargo cor01">
			2
		</div>
		<div class="tile cor01">
			3
		</div>
		<div class="tile tileLargo cor01">
			4
		</div>
		<div class="tile cor01">
			3
		</div>
		<div class="tile tileLargo cor01">
			5
		</div>
		<div class="tile2x2">
			<div class="tile tileMini cor01">
				3
			</div>
			<div class="tile tileMini cor01">
				3
			</div>
			<div class="tile tileMini cor01">
				3
			</div>
			<div class="tile tileMini cor01">
				3
			</div>
		</div>
		<div class="tile cor01">
			6
		</div>
		<div class="tile cor01">
			7
		</div>
		<div class="tile cor01">
			8
		</div>

		<div class="tile cor01">
			6
		</div>
		<div class="tile cor01">
			7
		</div>
		<div class="tile cor01">
			8
		</div>
	</div>
</div>
</div>