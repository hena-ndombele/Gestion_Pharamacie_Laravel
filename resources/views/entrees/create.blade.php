<!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Authentification</title>
          <!-- Liens CSS de Bootstrap 5 -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
        <body>
          <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="text-center">Connexion</h3>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre e-mail">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Scripts JS de Bootstrap 5 -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
