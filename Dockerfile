FROM node:16

# Create and change to the app directory
WORKDIR /usr/src/app

# Copy package.json and package-lock.json to the app directory
COPY package*.json ./

# Install the app dependencies
RUN npm install

# Copy the rest of the application code to the app directory
COPY . .

# Expose port 8080 to the outside world
EXPOSE 8080

# Command to run the app
CMD [ "node", "server.js" ]
