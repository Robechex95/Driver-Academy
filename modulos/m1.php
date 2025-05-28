<?php
$titulo = "Módulo 1 - Reglamento de Tránsito";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="../css/m1.css">
    <link rel="icon" href="../assets/images/ico.png">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="module-header">
        <nav class="navbar">
            <div class="brand-container">
                <img src="../assets/images/ico.png" alt="Logo" class="logo">
                <h1><?= $titulo ?></h1>
            </div>
            <a href="../index.php" class="return-button">Volver al Inicio</a>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="module-container">
        <!-- Sección del Reglamento -->
        <section class="regulation-section">
            <div class="section-header">
                <h2>📜 Reglamento Oficial CDMX</h2>
                <p>Estudia el documento completo para conocer las normas viales</p>
            </div>
            
            <div class="pdf-container">
                <iframe src="https://prontuario.cdmx.gob.mx/pdf/REGLAMENTO%20DE%20TRANSITO%20DE%20LA%20CIUDAD%20DE%20MEXICO%2026112024_compressed.pdf" 
                        class="pdf-viewer" 
                        title="Reglamento de Tránsito CDMX">
                </iframe>
                <div class="pdf-actions">
                    <a href="https://prontuario.cdmx.gob.mx/pdf/REGLAMENTO%20DE%20TRANSITO%20DE%20LA%20CIUDAD%20DE%20MEXICO%2026112024_compressed.pdf" 
                       class="pdf-button" 
                       target="_blank">
                       📥 Descargar Documento
                    </a>
                </div>
            </div>
        </section>

        <!-- Sección de Preguntas -->
        <section class="questions-section">
            <div class="section-header">
                <h2>❓ Situaciones Prácticas</h2>
                <p>Responde estas preguntas basadas en el reglamento</p>
            </div>
            
            <div class="question-list">
                <!-- Pregunta 1 -->
                <div class="question-card">
                    <h3>1. ¿Qué debes hacer al acercarte a un cruce escolar?</h3>
                    <div class="options">
                        <button class="option-button">A) Reducir velocidad a 20 km/h</button>
                        <button class="option-button correct">B) Detenerte completamente</button>
                        <button class="option-button">C) Tocar el claxon para alertar</button>
                    </div>
                    <div class="answer">
                        <p>✅ Respuesta correcta: <strong>B) Detenerte completamente</strong></p>
                        <p>Según el artículo 45 del reglamento, en zonas escolares debes detenerte completamente y ceder el paso a los peatones.</p>
                    </div>
                </div>
                
                <!-- Pregunta 2 -->
                <div class="question-card">
                    <h3>2. ¿Cuál es la velocidad máxima en avenidas principales?</h3>
                    <div class="options">
                        <button class="option-button correct">A) 50 km/h</button>
                        <button class="option-button">B) 70 km/h</button>
                        <button class="option-button">C) 80 km/h</button>
                    </div>
                    <div class="answer">
                        <p>✅ Respuesta correcta: <strong>A) 50 km/h</strong></p>
                        <p>El artículo 30 establece que la velocidad máxima en avenidas primarias es de 50 km/h.</p>
                    </div>
                </div>
                
                <!-- Pregunta 3 -->
                <div class="question-card">
                    <h3>3. ¿Qué indica una señal circular roja con blanco?</h3>
                    <div class="options">
                        <button class="option-button">A) Información turística</button>
                        <button class="option-button">B) Prevención de peligro</button>
                        <button class="option-button correct">C) Prohibición</button>
                    </div>
                    <div class="answer">
                        <p>✅ Respuesta correcta: <strong>C) Prohibición</strong></p>
                        <p>Las señales circulares rojas indican acciones prohibidas según el capítulo 3 del reglamento.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Botón de examen -->
        <div class="exam-section">
            <a href="m1e.php" class="exam-button">Realizar Examen Final</a>
        </div>
    </main>

    <script src="../js/m1.js"></script>
</body>
</html>