const { Client } = require("pg");

const getClient = async () => {
    
 const client = await new Client({
    user: 'postgres',
    host: 'localhost',
    database: 'postgres',
    password: 'psql',
    port: 5432
  });
  
  await client.connect();

}


getClient();