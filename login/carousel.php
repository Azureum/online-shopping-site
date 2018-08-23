<style>
.carouselmain {
    position: relative;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	margin:0px;
	padding:0px;
	
}

.carouselmain-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carouselmain-open:checked + .carouselmain-item {
    position: static;
    opacity: 100;
}

.carouselmain-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
	counter-increment:figure;
}

.carouselmain-item img {
    display: block;
	height:500px;
    width: 100%;
}


.carouselmain-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
	
}

.carouselmain-control.prev {
    left: 2%;
}

.carouselmain-control.next {
    right: 2%;
}

.carouselmain-control:hover {
    background: rgba(6, 0, 25, 0.8);
    color: #aaaaaa;
}

#carouselmain-1:checked ~ .control-1,
#carouselmain-2:checked ~ .control-2,
#carouselmain-3:checked ~ .control-3 {
    display: block;
}

.carouselmain-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

.carouselmain-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carouselmain-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 15px;
}

.carouselmain-bullet:hover {
    color: #aaaaaa;
}

#carouselmain-1:checked ~ .control-1 ~ .carouselmain-indicators li:nth-child(1) .carouselmain-bullet,
#carouselmain-2:checked ~ .control-2 ~ .carouselmain-indicators li:nth-child(2) .carouselmain-bullet,
#carouselmain-3:checked ~ .control-3 ~ .carouselmain-indicators li:nth-child(3) .carouselmain-bullet {
    color: #428bca;
}

</style>

<div class="carouselmain">
    <div class="carouselmain-inner">
        <input class="carouselmain-open" type="radio" id="carouselmain-1" name="carouselmain" aria-hidden="true" hidden="" checked="checked">
        <div class="carouselmain-item">
            <a href="http://localhost/ecommerce2/product.php?id=153&name=Harry%20Potter%20and%20the%20Cursed%20Child&price=1000">
            <img src="style/carousel/carousel1.jpg">
            </a>
           
        </div>
        <input class="carouselmain-open" type="radio" id="carouselmain-2" name="carouselmain" aria-hidden="true" hidden="">
        <div class="carouselmain-item">
            <a href="product_list.php?search=Tablets">
            <img src="style/carousel/carousel2.jpg">
            </a>
        </div>
        <input class="carouselmain-open" type="radio" id="carouselmain-3" name="carouselmain" aria-hidden="true" hidden="">
        <div class="carouselmain-item">
            <a href="product_list.php?search=Gaming">
            <img src="style/carousel/carousel3.jpg">
            </a>
        </div>
        <label for="carouselmain-3" class="carouselmain-control prev control-1">&lsaquo;</label>
        <label for="carouselmain-2" class="carouselmain-control next control-1">›</label>
        <label for="carouselmain-1" class="carouselmain-control prev control-2">‹</label>
        <label for="carouselmain-3" class="carouselmain-control next control-2">›</label>
        <label for="carouselmain-2" class="carouselmain-control prev control-3">‹</label>
        <label for="carouselmain-1" class="carouselmain-control next control-3">›</label>
        <ol class="carouselmain-indicators">
            <li>
                <label for="carouselmain-1" class="carouselmain-bullet">&#9679;</label>
            </li>
            <li>
                <label for="carouselmain-2" class="carouselmain-bullet">&#9679;</label>
            </li>
            <li>
                <label for="carouselmain-3" class="carouselmain-bullet">&#9679;</label>
            </li>
        </ol>
    </div>
</div>