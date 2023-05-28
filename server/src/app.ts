import express from 'express';
import { router } from './routes/index';

export const app = express();

app.use('/', router);

