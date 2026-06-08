*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#f1f5f9;
}

.sidebar{
position:fixed;
width:260px;
height:100vh;
background:#0f172a;
padding-top:20px;
}

.logo{
color:white;
font-size:24px;
font-weight:bold;
text-align:center;
margin-bottom:30px;
}

.sidebar ul{
list-style:none;
}

.sidebar ul li{
margin:10px;
}

.sidebar ul li a{
display:block;
padding:15px;
text-decoration:none;
color:white;
border-radius:10px;
transition:.3s;
}

.sidebar ul li a:hover,
.active a{
background:#22c55e;
}

.main-content{
margin-left:260px;
padding:20px;
}

.topbar{
display:flex;
justify-content:space-between;
align-items:center;
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.profile{
background:#22c55e;
color:white;
padding:10px 20px;
border-radius:30px;
}

.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:20px;
margin-top:25px;
}

.card{
padding:25px;
border-radius:15px;
color:white;
box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.card i{
font-size:35px;
margin-bottom:10px;
}

.card h3{
font-size:30px;
margin-bottom:5px;
}

.products{
background:linear-gradient(135deg,#2563eb,#1d4ed8);
}

.orders{
background:linear-gradient(135deg,#9333ea,#7e22ce);
}

.pending{
background:linear-gradient(135deg,#f59e0b,#d97706);
}

.accepted{
background:linear-gradient(135deg,#10b981,#059669);
}

.payments{
background:linear-gradient(135deg,#ef4444,#dc2626);
}

.customers{
background:linear-gradient(135deg,#06b6d4,#0891b2);
}

.table-section{
margin-top:30px;
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

table{
width:100%;
margin-top:15px;
border-collapse:collapse;
}

th{
background:#22c55e;
color:black;
padding:12px;
}

td{
padding:12px;
border-bottom:1px solid #ddd;
}