#!/bin/bash

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
ORIGINAL_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"
DESTINO_DIR="$HOME/Documentos/GitHub/guivaloz/MarketplaceAgricola"

echo "[Copiar] Inicia"

#
# Verificar
#
if [ ! -d $ORIGINAL_DIR ]; then
    echo "Error: No se encuentra $ORIGINAL_DIR"
    exit $E_FATAL
fi
if [ ! -d $DESTINO_DIR ]; then
    echo "Error: No se encuentra $DESTINO_DIR"
    exit $E_FATAL
fi
cd $DESTINO_DIR

#
# Eliminar y copiar estos directorios
#
for DIR in fonts img js less scss
do
    echo "  Eliminando y copiando $DIR..."
    rm -rf $DIR
    if [ "$?" -ne $EXITO ]; then
        echo "Error: No se puede eliminar $DIR"
        exit $E_FATAL
    fi
    cp -r $ORIGINAL_DIR/$DIR .
    if [ "$?" -ne $EXITO ]; then
        echo "Error: No se puede copiar $DIR"
        exit $E_FATAL
    fi
done

#
# Directorio imagenes
#
#if [ ! -d imagenes ]; then
#    mkdir imagenes
#    if [ "$?" -ne $EXITO ]; then
#        echo "Error: No se puede crear el directorio imagenes"
#        exit $E_FATAL
#    fi
#fi
#cp -r $ORIGINAL_DIR/imagenes/* imagenes/
#if [ "$?" -ne $EXITO ]; then
#    echo "Error: No se puede copiar imagenes"
#    exit $E_FATAL
#fi

#
# Directorio lib
#
if [ ! -d lib ]; then
    mkdir lib
    if [ "$?" -ne $EXITO ]; then
        echo "Error: No se puede crear el directorio lib"
        exit $E_FATAL
    fi
fi

#
# Directorios lib/Base y lib/Michelf
#
for DIR in Base Michelf
do
    echo "  Eliminando y copiando lib/$DIR..."
    rm -rf lib/$DIR
    if [ "$?" -ne $EXITO ]; then
        echo "Error: No se puede eliminar lib/$DIR"
        exit $E_FATAL
    fi
    cp -r $ORIGINAL_DIR/lib/$DIR lib/
    if [ "$?" -ne $EXITO ]; then
        echo "Error: No se puede copiar lib/$DIR"
        exit $E_FATAL
    fi
done

echo "[Copiar] Terminó con éxito."
exit $EXITO

