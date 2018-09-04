#Detect thu muc hien tai
CURRENT_DIR=$(pwd)
BIN_DIR="${CURRENT_DIR}/bin"
ALIAS_CONFIG_FILE_DIR=${CURRENT_DIR}/hz-alias
ALIAS_CONFIG_COMMAND="source ${ALIAS_CONFIG_FILE_DIR}"
ZSH_CONFIG_FILE_DIR=~/.zshrc
BASH_PROFILE_DIR=~/.bash_profile

# Remove config file if exists
if [ -f "${ALIAS_CONFIG_FILE_DIR}" ]
then
	/bin/rm "${ALIAS_CONFIG_FILE_DIR}"
fi

# Create a new config file
touch "${ALIAS_CONFIG_FILE_DIR}"

#Tao ra list cac alias
for i in `ls ${BIN_DIR}`
do
	echo "alias ${i}=\"${BIN_DIR}/${i}\"" >> "${ALIAS_CONFIG_FILE_DIR}"
done

if ! grep -q "${ALIAS_CONFIG_COMMAND}" ~/.zshrc; then
	echo "${ALIAS_CONFIG_COMMAND}" >> ${ZSH_CONFIG_FILE_DIR}
fi

echo "Successfully Installed!"
