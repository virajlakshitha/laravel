let canvas;
let ctx;
let savedImageData;
let dragging = false;
let strokeColor = 'block';
let fillColor = 'black';
let line_Width = 2;
let PolygonSides = 6;
let currentTool = 'brush';
let canvasHeight = 600;
let canvasWidth = 600;

class ShapeBoundingBox {
    constructor(left, top, width, height){
        this.left = left;
        this.top = top;
        this.width = width;
        this.height = height;
    }
}

class MouseDownPos {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

class Location {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

class PolygonPoint {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

let shapeBoundingBox = new ShapeBoundingBox(0,0,0,0);
let mouseDown = new MouseDownPos(0,0);
let loc = new Location(0,0);

document.addEventListener('DOMContentLoaded', setupCanvas);

function setupCanvas() {
    canvas = document.getElementById('my-canvas');
    ctx = canvas.getContext('2d');
    ctx.strokeStyle = strokeColor;
    ctx.lineWidth = line_Width;
    canvas.addEventListener("mousedown", ReactToMouseDown);
    canvas.addEventListener("mousemove", ReactToMouseMove);
    canvas.addEventListener("mouseup", ReactToMouseUp);
}

function changeTool(toolClicked) {
    document.getElementById('open').className = "";
    document.getElementById('save').className = "";
    document.getElementById('brush').className = "";
    document.getElementById('line').className = "";
    document.getElementById('rectangle').className = "";
    document.getElementById('circle').className = "";
    document.getElementById('ellipse').className = "";
    document.getElementById('polygon').className = "";
    document.getElementById(toolClicked).className = "selected";
    currentTool = toolClicked;
}

//Get Mouse Position
function getMousePosition(x,y) {
    let canvasSizeData = canvas.getBoundingClientReact();
    return { x: (x - canvasSizeData.left)*(canvas.width / canvasSizeData.width),
             y: (y - canvasSizeData.top)*(canvas.height / canvasSizeData.height) };
}

//Save Canvas Image
function SaveCanvasImage() {
    savedImageData = ctx.getImageData(0,0,canvas.width, canvas.height);
}

//Redraw Canvas Image
function RedrawCanvasImage() {
    ctx.putImageData(savedImageData);
}

//Update Rubberband Size Band
function UpdateRubberbandSizeData(loc) {
    shapeBoundingBox.width = Math.abs(loc.x - mouseDown.x);
    shapeBoundingBox.height = Math.abs(loc.y - mouseDown.y);

    if(loc.x > mouseDown.x){
        shapeBoundingBox.left = mouseDown.x;
    } else {
        shapeBoundingBox.left = loc.x;
    }

    if(loc.y > mouseDown.y){
        shapeBoundingBox.top = mouseDown.y;
    } else {
        shapeBoundingBox.top = loc.y;
    }
}

function getAngleUsingXAndY(mouselocX, mouselocY) {
    let adjacent = mouseDown.x - mouselocX;
    let opposite = mouseDown.y - mouselocY;
    return;
}

function radiansToDegrees(rad) {
    return (rad*(180/Math.PI)).toFixed(2);
}

function degreesToRadians(degrees) {
    return degrees*(Math.PI/180);
}

function ReactToMouseDown(e) {
    canvas.style.cursor = "crosshair";
    loc = getMousePosition(e.clientX, e.clientY);
    SaveCanvasImage();
    mouseDown.x = loc.x;
    mouseDown.y = loc.y;
    dragging = true;
}

function ReactToMouseMove(e) {
    canvas.style.cursor = "crosshair";
    loc = getMousePosition(e.clientX, e.clientY);
}

function ReactToMouseUp(e) {
    canvas.style.cursor = "crosshair";
    loc = getMousePosition(e.clientX, e.clientY);
    RedrawCanvasImage();
    UpdateRubberbandOnMove(loc);
    dragging = false;
    usingBrush = false;
}

function SaveImage() {
    var imageFile = document.getElementById('img-file');
    imageFile.setAttribute('download', 'image.png');
    imageFile.setAttribute('href', canvas.toDataURL());
}

function OpenImage() {
    let img = new Image();
    img.onload= function() {
        ctx.clearRect(0,0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0);
    }
    img.src = 'image.png';
}