import { app } from "./app";
import { expressConfig } from "./config/Express";

export const server = app.listen(expressConfig.porta, () =>{
    console.log(`App startado... [PORT ${expressConfig.porta}]`);
});
