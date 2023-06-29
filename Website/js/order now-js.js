

body, html
{
    height: 140%;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    

}

body 
{
    background-color: #020757;
    background-attachment: fixed;
    background-size: cover;
    position: relative;
}

h1
{
    text-align: center;
    color: aliceblue;
    text-shadow:  -3px 3px 18px #000000;
    font-size: 2.5em;
    padding: 30px 5px 5px;
}

.top
{
    
    align-items: center;
    background: linear-gradient(to right,#020757, #06013a );

   
}

.top a
{

    padding: 10px 10px 10px;
    text-decoration: none;
    float: right;
    color: aliceblue;
    width: 80px;
    text-align: center;
    transition: 0.7s;
}

.top a:hover
{
   background-color: #f44336;
   color: #000000;
   border-radius: 8px;
   width: 120px;
   transition: 0.7s;

}

.top a:hover::after
{
    width: 80px;
    transition: 0.7s;

}

.top a.active
{
    background-color: #f44336;
   color: #000000;
   border-radius: 8px;
}

.srhbar
{
    background: #dddddd;
    border-radius: 10px;
    height: 50px;
    width: 550px;
    margin: 0 35.5%;
    
    
   
}



input
{
    background: transparent;
    border: 0;
    outline: 0;
    padding: 15px 18px;
    
    
}

.container
{
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    position: absolute;
    width: max-content;

}

.card
{
    border: 1px solid black;
    background: #dddddd;
    opacity: 0.85;
    border-radius: 20px;
    width: max-content;
    text-align: center;
    display: inline-block;
    margin: 5px;
    box-shadow: #dddddd;
    transition: 0.7s;

}

.card img
{
    width: 300px;
    height: 400px;
    padding: 5px;
    border-radius: 5px;
}

.card:hover
{
    transform: scale(1.05);
    transition: 0.7s;
}

.card:hover::after
{
    transform: scale(0);
    transition: 0.7s;
}

.title
{
    font-weight: bold;
    margin: 20px;
}

button
{
    border-color: #f44336;
    background: #f44336;
    color: #dddddd;
    font-weight: bold;
    margin: 20px;
    padding: 5px 10px;
    transition: 0.5s;
}

button:hover
{
    transform: scale(1.1);
    color: #020757;
    transition: 0.5s;

}

button:hover::after
{
    transform: scale(0);
    color: #ffffff;
    transition: 0.5s;
}

.cart
{
    width: 350px;
    height: 1000px;
    float: right;
    text-align: center;
    background: #dddddd;
    overflow-y: scroll;
    margin: 20px;
    border-radius: 20px;
    opacity: 0.85;


}

.cart .tittle
{
    font-weight: bold;
    margin: 20px;
}

footer
{
    width: 100%;
    position: absolute;
    bottom: 0;
    background: linear-gradient(to right,#06013a,#020757 );
    color: #fff;
    padding: 0 0 0px;
    font-size: 13px;
    line-height: 20px;

}

.row
{
    width: 85%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    text-align: center;
    padding: 10px 100px ;
}

.logo-1
{
    width: 80px;
    height: 80px;
    margin-bottom: 50px;
    padding: 10px 70px ;
}

.col-2
{
    padding: 10px 70px ;
}
.col-2 h3
{
    width: fit-content;
    position: relative;
    margin-bottom: 40px;
    
}

.col-3 h4
{
    width: fit-content;
    position: relative;
    margin-bottom: 40px;
    
}

.col-3
{
    padding: 10px 70px ;
}


.col-4 h5
{
    width: fit-content;
    position: relative;
    margin-bottom: 40px;
    font-size: 13px;
}

.col-4
{
    padding: 10px 70px ;
}

.col-5 h5
{
    width: fit-content;
    position: relative;
    margin-bottom: 40px;
}

.col-5
{
    padding: 10px 70px ;
    float: right;
}

.logo-2
{
    width: 140px;
    height: 100px;
    margin-bottom: 50px;
    
}
.parah
{
    font-size: 12px;
    padding: 0;
    text-align: center;
}

