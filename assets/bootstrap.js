import { Application } from 'stimulus';
import { definitionsFromContext } from 'stimulus/webpack-helpers';

// Créer l'application Stimulus
const application = Application.start();

// Importer tous les contrôleurs Stimulus
const context = require.context('./controllers', true, /\.js$/);
application.load(definitionsFromContext(context));
