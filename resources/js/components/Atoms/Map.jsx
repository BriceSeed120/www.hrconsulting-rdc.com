import React, { Component } from 'react';
import { Map, GoogleApiWrapper,  Marker } from 'google-maps-react';

const mapStyles = {
  width: '100%',
  height: '100%'
};

export class MapContainer extends Component {
    state = {
        activeMarker: {},
        selectedPlace: {}
      };
      onMarkerClick = (props, marker, e) =>
    this.setState({
      selectedPlace: props,
      activeMarker: marker,
      showingInfoWindow: true
    });

  onClose = props => {
    if (this.state.showingInfoWindow) {
      this.setState({
        showingInfoWindow: false,
        activeMarker: null
      });
    }
  };
  render() {
    return (
      <Map className='map'
        google={this.props.google}
        zoom={14}
        style={mapStyles}
        initialCenter={
          {
            lat: 4.021448334611853,
            lng: 9.71213298273749
          }
        }
      >
          <Marker
          onClick={this.onMarkerClick}
          name={'Kenyatta International Convention Centre'}
        />
      </Map>
    );
  }
}

export default GoogleApiWrapper({
  apiKey: 'AIzaSyAUy2nsLnNuLSf58r7dicpL20i8NpLshBw'
})(MapContainer);