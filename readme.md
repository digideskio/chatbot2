# chatbot2

## Installation
Run a git clone, then `compser install`.

## Configuration
Copy `config-sample.php` to `config.php` and replace the configuration options with the ones for your server.

## Usage
Use the bot by running commands from a chat room the bot is a member of, or by messaging the bot directly. All commands start with a hash (`#`), but the hash can be omitted if messaging the bot directly.

Run `#help` to list all available commands.

Running `##` will re-run the last command the bot received with the same parameters.

## Adding Commands
New commands can be added to the `commands/` directory, and should contain a single returned function. See `commands/say.php` for a basic example.

Command help messages can be added to the `command-help/` directory. They should match the command name, and have a `.txt` file extension.
