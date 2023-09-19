const mysql = require('mysql2/promise');
const { Sequelize } = require('sequelize');
require('dotenv').config();
module.exports = db = {};

initialize();

async function initialize() {

    

    // create db if it doesn't already exist
    const { DB_HOST, DB_PORT, DB_USER, DB_PASSWORD, DB_DATABASE } = process.env;

    const connection = await mysql.createConnection({ host: DB_HOST, port: DB_PORT, user: DB_USER, password: DB_PASSWORD });
    await connection.query(`CREATE DATABASE IF NOT EXISTS \`${ DB_DATABASE}\`;`);

    // connect to db
    const sequelize = new Sequelize(DB_DATABASE, DB_USER, DB_PASSWORD, { dialect: 'mysql' });

    // init models and add them to the exported db object
    db.User = require('../users/user.model')(sequelize);

    // sync all models with database
    await sequelize.sync();
}