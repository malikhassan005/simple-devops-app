<!DOCTYPE html>
<html>
<head>
    <title>DevOps Laravel Project</title>

    <style>
        body{
            font-family: Arial;
            background:#0f172a;
            color:white;
            margin:0;
            padding:40px;
        }

        .container{
            max-width:1000px;
            margin:auto;
        }

        h1{
            font-size:48px;
            margin-bottom:10px;
            color:#38bdf8;
        }

        p{
            color:#cbd5e1;
            font-size:18px;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-top:40px;
        }

        .card{
            background:#1e293b;
            padding:25px;
            border-radius:14px;
        }

        .card h3{
            margin-top:0;
            color:#22c55e;
        }

        .status{
            margin-top:10px;
            color:#94a3b8;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Laravel DevOps Workflow</h1>

    <p>
        Complete DevOps pipeline demonstration using Laravel, Docker, Jenkins,
        Kubernetes, Terraform, Ansible, Prometheus and Grafana.
    </p>

    <div class="grid">

        <div class="card">
            <h3>Docker</h3>
            <div class="status">Containerization Configured</div>
        </div>

        <div class="card">
            <h3>Jenkins CI/CD</h3>
            <div class="status">Pipeline Integrated</div>
        </div>

        <div class="card">
            <h3>Kubernetes</h3>
            <div class="status">Deployment Ready</div>
        </div>

        <div class="card">
            <h3>AWS Cloud</h3>
            <div class="status">Cloud Infrastructure</div>
        </div>

        <div class="card">
            <h3>Terraform</h3>
            <div class="status">Infrastructure as Code</div>
        </div>

        <div class="card">
            <h3>Prometheus & Grafana</h3>
            <div class="status">Monitoring & Analytics</div>
        </div>

    </div>

</div>

</body>
</html>