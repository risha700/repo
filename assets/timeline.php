				<div id="about" class="ui container grid center aligned">
					<div class="ui story-title">
						<i class="sort content ascending icon center aligned" style="display:inline-block; font-size:160%;"></i>
						<h2 style="display:inline;">Pro Timeline</h2>
					</div>
					<div class="ui cards container grid center aligned" >
				        <div class="">
				          <div class="timeLine-overflow" style="" id="timeLine">
				          <ul class="timeline timeline-vertical">
				            <li class="timeline-item">
				              <div class="timeline-badge"><i class=""> 2008</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Al Mogazi Auditors</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Intern</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Learning and implementing the basics of accounting During my last year in college</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge"><i class=""> 2009</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Plast Rafia</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Junior Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Nominated by my former employer to take a responsibility of finance in the industrial field </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge info"><i class=""> 2010</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Adlan Public Accountants</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Senior Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>By that time I aimed to deep dive in finance field when I acquired some professional skills </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge danger"><i>2012</i></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Telecom Egypt</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Customer Service Advisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Decided to dive more into the science of accounting while studying CMA and gaining the art of connect </p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge warning"><i></i>2013</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Talabat Services</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i>  Admin HR Accountant</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Hence I had the chance to utilize my humble expertise abroad and to learn about the corporate culture</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2014</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Rocket Internet</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Key Accounts Manager</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Proudly elected by the new management to boost up Carmudi in the Gulf area</p>
				                </div>
				              </div>
				            </li>
				            <li class="timeline-item">
				              <div class="timeline-badge warning"><i></i>2015</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">NFPM-Exceed Industrial</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i>  Senior Sales Supervisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>I have got a new offer in the sales field in the semi-governmental sector</p>
				                </div>
				              </div>
				            </li> 
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2015</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Vodafone VIS</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Customer Service Supervisor</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Fortunately, had been a part of customer delighting and team motivation</p>
				                </div>
				              </div>
				            </li>    
				            <li class="timeline-item">
				              <div class="timeline-badge"><i></i>2016</div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">E-life HUB</h4>
				                  <p><small class="text-muted"><i class="glyphicon glyphicon-tags"></i> Entrepreneur & Managing Director</small></p>
				                </div>
				                <div class="timeline-body">
				                  <p>Happily I set up my digital marketing consultation hub </p>
				                </div>
				              </div>
				            </li>              
							<li class="timeline-item">
				              <div class="timeline-badge"><i></i><?php echo date("Y"); ?></div>
				              <div class="timeline-panel">
				                <div class="timeline-heading">
				                  <h4 class="timeline-title">Seeking New Challenge</h4>
				                 <div class="ui add icon button" id="lockin" data-tooltip="Reserve an evaluation">
									  <i class="add icon"></i>
									  <p>Lock me in</small></p>
								</div>  
				                </div>
				                <div class="timeline-body">
				                  <p>Currently I am working on my masteral degree in business adminstraion </p>
				                </div>
				              </div>
				            </li>              				                
				          </ul>
				        </div>
				        </div>
				      </div>
					</div>

<script type="text/javascript">
					$('#lockin').on('click', function(){

						$('.ui.modal.contact')
						.modal({
								closable:true,
							    autofocus: true,
							    transition: 'fly up',
							    duration:1000,
							    observeChanges: true,
							    debug: false,
							    onUpdate: 'visible',
											  
									  })

							
					   			.modal('show');

						
							});


</script>
					
<style type="text/css">



/*Time line
============================*/


/* Timeline */
.timeline,
.timeline-vertical {
  list-style: none;
  padding: 20px;
  position: relative;
}
.timeline:before {
  top: 40px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline .timeline-item {
  margin-bottom: 20px;
  position: relative;
  bottom:-60px;
}
.timeline .timeline-item:before,
.timeline .timeline-item:after {
  content: "";
  display: table;
}
.timeline .timeline-item:after {
  clear: both;
}
.timeline .timeline-item .timeline-badge {
  color: #fff;
  width: 54px;
  height: 54px;
  line-height: 52px;
  font-size: 16px;
  text-align: center;
  position: absolute;
  top: 18px;
  left: 50%;
  margin-left: -25px;
  border: 3px solid #ffffff;
  background: #b3dced; /* Old browsers */
  background: -moz-linear-gradient(45deg, #b3dced 22%, #bce0ee 22%, #b3dced 22%, #29b8e5 50%, #bce0ee 79%); /* FF3.6-15 */
  background: -webkit-linear-gradient(45deg, #b3dced 22%,#bce0ee 22%,#b3dced 22%,#29b8e5 50%,#bce0ee 79%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(45deg, #b3dced 22%,#bce0ee 22%,#b3dced 22%,#29b8e5 50%,#bce0ee 79%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=1 ); /* IE6-9 fallback on vertical gradient */ 
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}

.timeline .timeline-item .timeline-panel {
  border: 1px solid #c0c0c0;
  padding: 20px;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline .timeline-item .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -16px;
  display: block;
  border-top: 16px solid transparent;
  border-left: 16px solid #c0c0c0;
  border-right: 0 solid #c0c0c0;
  border-bottom: 16px solid transparent;
  content: " ";
}
.timeline .timeline-item .timeline-panel .timeline-title {
  margin-top: 0;
  color: inherit;
  color: rgba(216, 175, 124, 0.77);
}
.timeline-heading p small{color: #04D1FF;}
.timeline .timeline-item .timeline-panel .timeline-body > p,
.timeline .timeline-item .timeline-panel .timeline-body > ul {
  margin-bottom: 0;
}
.timeline .timeline-item .timeline-panel .timeline-body > p + p {
  margin-top: 5px;
}


.timeline .timeline-item:nth-child(even)>.timeline-panel {
    float: right;
    position: relative;
    left: 16em;
}
.timeline .timeline-item:nth-child(odd) >.timeline-panel {
    float: left;
    position: relative;
    right: 16em;
}
.timeline .timeline-item:nth-child(even) >.timeline-panel:before {
float: right;
}
.timeline .timeline-item:nth-child(odd) >.timeline-panel:before {

float: left;
}
.timeline-vertical {
  list-style: none;
  position: relative;
  display:block;
}
.timeline-vertical:before {
  height: 100%;
  width: 3px;
}
.timeline-vertical .timeline-item {
  display: block;
  /*height: 150px;*/
  width: 20%;
  min-width: 350px;
  margin: 0 auto;
}
.timeline-vertical .timeline-item .timeline-panel {
  box-shadow: 3px 2px 5px -3.5px rgba(21, 209, 218, 0.62);
}
.timeline-vertical .timeline-item:nth-child(odd) .timeline-panel:before {
    border-right: 0 solid #c0c0c0 !important;
    border-top: 16px solid transparent !important;
    border-bottom: 16px solid transparent !important;
    border-left: 16px solid #c0c0c0 !important;
}
.timeline-vertical .timeline-item:nth-child(even) .timeline-panel:before {
    border-right: 16px solid #c0c0c0 !important;    
    border-top: 16px solid transparent !important;
    border-bottom: 16px solid transparent !important;
   border-left: 0 solid #c0c0c0 !important;
     right: 348px;
}
.timeline-vertical .timeline-item:before,
.timeline-vertical .timeline-item:after {
  /*display: none;*/
}

.timeline-panel:hover, .timeline-panel:focus {
    transform: scale(1.05);
    overflow:visible;
    

}
li.timeline-item:hover > .timeline-badge{
    background: #c0c0c0 !important;
}
li.timeline-item:focus > .timeline-badge{
    background: #c0c0c0 !important;
}

  
.timeline-panel {
  transition: transform .5s ease-in-out;
}


div#about {
    padding: 4em 0;
    position: relative;
    display: block;
    box-sizing:border-box;
}
.story-title{
  top: 2em;
  position: relative;
}

@media screen and (max-width:800px){


.timeline-vertical:before {
    left: auto;
    margin-left: -13em;
    position: absolute;
}

.timeline .timeline-item:nth-child(odd) >.timeline-panel {
  position: relative;
  display: block;
    float: none !important;
    left: 3em !important; 
    width: 300px !important;



}
.timeline .timeline-item:nth-child(even) >.timeline-panel {
  position: relative;
  display: block;
    float: none !important;
    left: 3em !important; 
    width: 300px !important;


}



.timeline .timeline-item .timeline-badge {
    color: #fff;
    width: 54px;
    height: 54px;
    line-height: 52px;
    font-size: 16px;
    text-align: center;
    position: relative;
    top: 4.3em;
    left: auto;
    margin-left: -2em;
    border: 3px solid #ffffff;
    background: #b3dced;
    background: -moz-linear-gradient(45deg, #b3dced 22%, #bce0ee 22%, #b3dced 22%, #29b8e5 50%, #bce0ee 79%);
    background: -webkit-linear-gradient(45deg, #b3dced 22%,#bce0ee 22%,#b3dced 22%,#29b8e5 50%,#bce0ee 79%);
    background: linear-gradient(45deg, #b3dced 22%,#bce0ee 22%,#b3dced 22%,#29b8e5 50%,#bce0ee 79%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=1 );
    /* z-index: 100; */
    border-top-right-radius: 50%;
    /* border-top-left-radius: 50%; */
    border-bottom-right-radius: 50%;
    /* border-bottom-left-radius: 50%; */
}
.timeline-vertical .timeline-item:nth-child(odd) .timeline-panel:before{
      border-right: 16px solid #c0c0c0 !important;
    border-top: 16px solid transparent !important;
    border-bottom: 16px solid transparent !important;
    border-left: 0 solid #c0c0c0 !important;
    right: 299px



}


.timeline-vertical .timeline-item:nth-child(even) .timeline-panel:before{
right: 299px

}
}




</style>


